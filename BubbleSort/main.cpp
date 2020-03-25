#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <iostream>

void BubbleSort(int vetor[]);

#define VETORL 10

int main() {
  int vetor[VETORL] = {0};

  srand(time(NULL));

  // inserir dados

  for (int i = 0; i < VETORL; i++){
    vetor[i] = rand() % 100; // gerar valores aleatorios
  }
  printf("VETOR NAO ORDENADO: \n");
  for (int i =0; i < VETORL; i++)
    printf("%d\n", vetor[i]);
  

  BubbleSort(vetor);

  printf("VETOR ORDENADO: \n");
  for (int i = 0; i < VETORL; i++)
    printf("%d\n", vetor[i]);

  system("pause");

  return 0;
}

void BubbleSort(int vetor[])
{
int aux;
for(int n = 1; n <= VETORL; n++)
{
    for (int i = 0 ; i<(VETORL -1); i ++)
    {
      if (vetor[i]> vetor[i+1]){ // crescendo
          aux = vetor[i];
          vetor[i] = vetor[i+1];
          vetor[i+1] = aux;
      }
    }
  }
}
