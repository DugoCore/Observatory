#!/usr/bin/env python3
"""
Script to view the contents of the generated Excel file
"""

import pandas as pd

def view_excel_contents():
    """View the contents of the Excel file"""
    try:
        # Read the Excel file
        df = pd.read_excel('estado_cuenta_banco.xlsx', sheet_name='Estado de Cuenta')
        
        print("=== ESTADO DE CUENTA BANCARIO ===")
        print(f"Total de transacciones: {len(df)}")
        print("\nColumnas:", list(df.columns))
        print("\n" + "="*80)
        print("PRIMERAS 10 TRANSACCIONES:")
        print("="*80)
        
        # Show first 10 transactions with better formatting
        pd.set_option('display.max_columns', None)
        pd.set_option('display.width', 1000)
        pd.set_option('display.max_colwidth', 30)
        
        print(df.head(10).to_string(index=False))
        
        print("\n" + "="*80)
        print("RESUMEN DE TRANSACCIONES:")
        print("="*80)
        
        # Summary statistics
        creditos = df[df['Tipo_Transaccion'] == 'Crédito']
        debitos = df[df['Tipo_Transaccion'] == 'Débito']
        
        print(f"Créditos: {len(creditos)} transacciones")
        print(f"Débitos: {len(debitos)} transacciones")
        
        # Show transaction types breakdown
        print(f"\nMedios de atención:")
        medio_counts = df['Medio_Atencion'].value_counts()
        for medio, count in medio_counts.items():
            print(f"  {medio}: {count} transacciones")
            
        print(f"\nÚltimo saldo: {df['Saldo'].iloc[-1]}")
        
        return True
        
    except Exception as e:
        print(f"Error reading Excel file: {e}")
        return False

if __name__ == "__main__":
    view_excel_contents()