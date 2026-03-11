@echo off
chcp 65001 > nul
D:\MinGW\bin\gcc.exe -Wall -Wextra -g asdas.c -o asdas.exe
asdas.exe
pause