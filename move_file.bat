@echo off
REM Script para mover el archivo Excel descargado
echo Moviendo archivo Excel a la carpeta deseada...

set "source=C:\Users\Usuario 1\Downloads\BCP_Complete_Bank_Statement_June_2025.xlsx"
set "destination=C:\Users\Usuario 1\Downloads\ilovepdf_pages-to-jpg\"

if exist "%source%" (
    move "%source%" "%destination%"
    if %errorlevel%==0 (
        echo ✅ Archivo movido exitosamente a: %destination%
    ) else (
        echo ❌ Error al mover el archivo
    )
) else (
    echo ❌ Archivo no encontrado en Downloads
    echo Por favor, descarga primero el archivo Excel
)

pause