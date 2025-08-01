# Drupal Fix Permisos PowerShell Script

$filesPath = ".\sites\default\files"
if (-Not (Test-Path $filesPath)) {
    New-Item -ItemType Directory -Path $filesPath
}

$subdirs = @(
    "$filesPath\php",
    "$filesPath\js",
    "$filesPath\css",
    "$filesPath\twig"
)

foreach ($dir in $subdirs) {
    if (-Not (Test-Path $dir)) {
        New-Item -ItemType Directory -Path $dir
    }
}

$acl = Get-Acl $filesPath
$rule = New-Object System.Security.AccessControl.FileSystemAccessRule("$env:UserName", "FullControl", "ContainerInherit, ObjectInherit", "None", "Allow")
$acl.SetAccessRule($rule)
Set-Acl -Path $filesPath -AclObject $acl

Write-Host "Permisos aplicados correctamente a sites/default/files y subdirectorios"
