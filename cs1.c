#include<stdio.h>
#include <stdlib.h>

int main()
{
    int n,m;
    scanf("%d%d",&n,&m);
    for(int i=0;i<n/2;i++)
    {
        int x = (n/2)-i;
        while(x--)
          printf("---");
        int y = (2*i+1);
        while(y--)
          printf(".|.");
        int z = (n/2)-i;
        while(z--)
          printf("---");
        printf("\n");
    }
    int x = (m-7)/2;
    while(x--)
      printf("-");
    printf("WELCOME");
    int  y = (m-7)/2;
    while(y--)
      printf("-");
    printf("\n");
    for(int i=0;i<n/2;i++)
    {
      int j=i+1;
      while(j--)
      {
        printf("---");
      }
      int y = n-2*(i+1);
      while(y--)
        printf(".|.");
      int l=i+1;
      while(l--)
      {
        printf("---");
      }
      printf("\n");
    }
}