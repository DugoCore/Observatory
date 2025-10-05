#!/usr/bin/env python3
"""
Script to parse bank statement text and convert to Excel format
"""

import pandas as pd
import re
from datetime import datetime

def create_excel_from_statement():
    """
    Create Excel file from bank statement text
    """
    # Bank statement data extracted from the provided text
    bank_statement = """02-06       TRAN.CTAS.TERC.BM      BPI                    111-023   915185   16:07   BMO321   2701          350.00     179,040.52 
02-06       TRANSF.BCO.SCOTIABANK  VEN                    111-054   754508   11:42   IR00E2   2014          462.00     179,502.52 
02-06       TRAN.CTAS.TERC.HK      BPI                    111-023   095812   16:31   HBK91T   2701          700.00     180,202.52 
02-06       TRANSF.BCO.INTERBANK   VEN                    111-054   682961   20:00   IR00B1   2014        1,191.20     181,393.72 
02-06       TRAN.CTAS.TERC.BM      BPI                    111-023   509301   15:12   BMOC58   2701        1,584.00     182,977.72 
02-06       TRANSF.BCO.INTERBANK   VEN                    111-054   583390   15:21   IR0057   2014        1,850.00     184,827.72 
02-06       TRAN.CTAS.TERC.BM      BPI                    111-023   354546   12:37   BMOA05   2701        7,700.00     192,527.72 
02-06       A 215 72010599 0       TLC                    111-065   193855   16:37   OBE057   4401          580.00-    191,947.72 
02-06       PAGO PRESTAMO          INT                    111-016   000000                    4906       10,998.36-    180,949.36 
02-06       COM.ESTADO CTA.ESPEC.  INT                    215-000   878018                    4985            3.50-    180,945.86 
02-06       IMPUESTO ITF           INT                       -                                0909            1.00-    180,944.86 
03-06       ABON PLIN-TIFFANY ALAN POS                    111-014   649692   15:07   TBFA15   2301          140.00     181,084.86 
03-06       TRAN.CTAS.TERC.HK      BPI                    111-023   061259   13:51   HBK573   2701          360.00     181,444.86 
03-06       ABON PLIN-TIFFANY ALAN POS                    111-014   629600   15:06   TBEA12   2301          500.00     181,944.86 
03-06       ABON PLIN-TIFFANY ALAN POS                    111-014   781563   15:06   TBEA20   2301          500.00     182,444.86 
03-06       TRAN.CTAS.TERC.BM      BPI                    111-023   719349   11:33   BMO929   2701        1,400.00     183,844.86 
03-06       TRAN.CTAS.TERC.BM      BPI                    111-023   831357   11:50   BMO536   2701        2,375.00     186,219.86 
03-06       TRAN.CTAS.TERC.HK      BPI                    111-023   087430   15:59   HBK481   2701        2,625.00     188,844.86 
03-06       IMPUESTO ITF           INT                       -                                0909             .25-    188,844.61 
04-06       TRAN.CTAS.TERC.HK      BPI                    111-023   040150   11:27   HBK669   2701          540.00     189,384.61 
04-06       TRANSF.BCO.INTERBANK   VEN                    111-054   661769   14:52   IR00F3   2014          777.60     190,162.21 
04-06       TRANSF.BCO.INTERBANK   VEN                    111-054   665664   14:54   IR00B6   2014          960.00     191,122.21 
04-06       ENTR.EFEC. 0389275     VEN SUC MOQUEGUA       430-000   389275   12:05   T62950   1001       10,260.00     201,382.21 
04-06       IMPUESTO ITF           INT                       -                                0909             .50-    201,381.71 
05-06       Pago YAPE de 21503     BPI                    111-023   431231   15:46   AXI270   2713           10.00     201,391.71 
05-06       Pago YAPE de 21599     BPI                    111-023   133421   08:39   AXI780   2713           20.00     201,411.71 
05-06       TRAN.CEL.BM.           BPI                    111-023   391181   16:19   BMO783   2701          270.00     201,681.71 
05-06       TRAN.CTAS.TERC.HK      BPI                    111-023   113707   18:01   HBK95D   2701          720.00     202,401.71 
05-06       TRAN.CTAS.TERC.BM      BPI                    111-023   205268   10:27   BMOB85   2701          850.00     203,251.71 
05-06       TRAN.CTAS.TERC.BM      BPI                    111-023   479374   13:46   BMO743   2701        1,095.00     204,346.71 
05-06       TRAN.CTAS.TERC.HK      BPI                    111-023   087890   15:48   HBK49A   2701        1,225.00     205,571.71 
05-06       TRAN.CTAS.TERC.BM      BPI                    111-023   837572   12:08   BMOC19   2701        3,040.00     208,611.71 
05-06       Pago YAPE a 215044     BPI                    111-023   730243   10:44   AXI595   4715            8.00-    208,603.71 
05-06       IMPUESTO ITF           INT                       -                                0909             .25-    208,603.46 
06-06       DE MAXSEIN EIRL        TLC                    111-065   093777   11:50   OBEB69   2401            3.60     208,607.06 
06-06       ENTR.EFEC. 0220552     VEN AG.CAYMA           215-002   220552   15:34   T44264   1018          405.00     209,012.06 
06-06       DE JORSA SOLUCIONES S  TLC                    111-065   082943   11:33   OBE630   2401          435.00     209,447.06 
06-06       TRAN.CTAS.TERC.HK      BPI                    111-023   055911   14:21   HBK94A   2701          720.00     210,167.06 
06-06       ENTR.EFEC. 0220362     VEN AG.CAYMA           215-002   220362   15:34   T44264   1018        1,000.00     211,167.06 
06-06       DE INDUSTRIAS MINER EM TLC                    111-065   094576   11:47   OBE911   2401        1,600.00     212,767.06 
06-06       YQ-NORKYS AREQUIPA C   POS                    111-014   388895   21:00   TBSA35   4302           61.90-    212,705.16 
06-06       IMPUESTO ITF           INT                       -                                0909             .10-    212,705.06 
07-06       Pago YAPE de 21504     BPI                    111-023   373354   16:57   AXI480   2713          420.00     213,125.06 
07-06       TRAN.CTAS.TERC.BM      BPI                    111-023   161768   21:53   BMO749   4701        3,000.00-    210,125.06 
08-06       IMPUESTO ITF           INT                       -                                0909             .15-    210,124.91 
09-06       Pago YAPE de 40597     BPI                    111-023   042921   16:44   AXIG17   2713          350.00     210,474.91 
09-06       TRAN.CTAS.TERC.BM      BPI                    111-023   659045   14:37   BMO117   2701        5,076.00     215,550.91 
09-06       IMPUESTO ITF           INT                       -                                0909             .25-    215,550.66 
10-06       Pago YAPE de 21506     BPI                    111-023   600358   09:51   AXI812   2713            3.50     215,554.16 
10-06       Pago YAPE de 21540     BPI                    111-023   955884   15:28   AXIT14   2713          280.00     215,834.16 
10-06       Pago YAPE de 28540     BPI                    111-023   789914   20:08   AXIS06   2713          400.00     216,234.16"""
    
    # Parse each line manually for better accuracy
    transactions = []
    lines = bank_statement.strip().split('\n')
    
    for line in lines:
        if line.strip():
            # Use regex to parse the structured data
            # Pattern: Date Description MediumType SucAgencia NumOp Time RefCode Type Amount Balance
            pattern = r'(\d{2}-\d{2})\s+(.+?)\s+(BPI|VEN|TLC|POS|INT|CAJ)\s+(.+?)\s+(\d{2}:\d{2}|\s+)\s+(.+?)\s+(\d{1,3}(?:,\d{3})*\.\d{2})(-?)\s+(\d{1,3}(?:,\d{3})*\.\d{2})$'
            
            # Simpler approach - split and extract key fields
            parts = line.split()
            
            if len(parts) >= 5:
                fecha = parts[0] + '/2025'
                
                # Find description (everything before medium type)
                descripcion_parts = []
                medium_found = False
                medium_types = ['BPI', 'VEN', 'TLC', 'POS', 'INT', 'CAJ']
                medio_atencion = ''
                
                i = 1
                while i < len(parts) and not medium_found:
                    if parts[i] in medium_types:
                        medio_atencion = parts[i]
                        medium_found = True
                    else:
                        descripcion_parts.append(parts[i])
                        i += 1
                
                descripcion = ' '.join(descripcion_parts)
                
                # Extract time (HH:MM format)
                hora = ''
                for part in parts:
                    if re.match(r'\d{2}:\d{2}', part):
                        hora = part
                        break
                
                # Extract amount and balance (last two numeric values on the line)
                monto = ''
                saldo = ''
                
                # Find the amount and balance at the end of the line
                amount_balance_match = re.search(r'(\d{1,3}(?:,\d{3})*\.\d{2})(-?)\s+(\d{1,3}(?:,\d{3})*\.\d{2})\s*$', line)
                if amount_balance_match:
                    monto = amount_balance_match.group(1)
                    if amount_balance_match.group(2) == '-':
                        monto = '-' + monto
                    saldo = amount_balance_match.group(3)
                
                # Extract operation numbers and references
                num_operacion = ''
                referencia = ''
                tipo_codigo = ''
                
                for part in parts:
                    # Look for 6-digit numbers (operation numbers)
                    if re.match(r'\d{6}', part):
                        num_operacion = part
                    # Look for alphanumeric codes (references)
                    elif re.match(r'[A-Z]{2,3}\d{2,4}', part):
                        referencia = part
                    # Look for 4-digit type codes
                    elif re.match(r'\d{4}$', part) and len(part) == 4:
                        tipo_codigo = part
                
                transactions.append({
                    'Fecha': fecha,
                    'Descripcion': descripcion.strip(),
                    'Medio_Atencion': medio_atencion,
                    'Hora': hora,
                    'Numero_Operacion': num_operacion,
                    'Referencia': referencia,
                    'Tipo_Codigo': tipo_codigo,
                    'Monto': monto,
                    'Saldo': saldo
                })
    
    # Create DataFrame
    df = pd.DataFrame(transactions)
    
    # Add some additional formatting
    df['Tipo_Transaccion'] = df['Monto'].apply(lambda x: 'Débito' if str(x).startswith('-') else 'Crédito')
    
    # Reorder columns
    column_order = ['Fecha', 'Descripcion', 'Medio_Atencion', 'Tipo_Transaccion', 'Monto', 'Saldo', 'Hora', 'Numero_Operacion', 'Referencia', 'Tipo_Codigo']
    df = df[column_order]
    
    # Save to Excel
    try:
        output_file = 'estado_cuenta_banco.xlsx'
        df.to_excel(output_file, index=False, sheet_name='Estado de Cuenta')
        print(f"Excel file created successfully: {output_file}")
        print(f"Total transactions processed: {len(transactions)}")
        print("\nFirst few records:")
        print(df.head())
        return True
    except Exception as e:
        print(f"Error creating Excel file: {e}")
        return False

if __name__ == "__main__":
    # Create the Excel file
    create_excel_from_statement()