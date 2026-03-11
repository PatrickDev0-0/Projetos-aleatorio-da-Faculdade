#include <stdio.h>
#include <windows.h>

int main() {
    SetConsoleCP(65001);
    SetConsoleOutputCP(65001);
    float num1;
    float num2;
    float num3;
    printf ("digite sua primeira nota: \n");
    scanf ("%f", &num1);
    printf ("digite sua segunda nota: \n");
    scanf ("%f", &num2);
    printf ("digite sua terceira nota: \n");
    scanf ("%f", &num3);
    float media;
    media = (num1+num2+num3)/3;
    printf ("%f.\n", media);
    return 0;
}