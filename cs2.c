#include<stdio.h>
#include <stdlib.h>

int main()
{
    int t;
    scanf("%d",&t);
    while(t--)
    {
        int sum = 0;
        char a;
        while(sum>=0)
        {
            scanf("%c",&a);
            if(a=='\n')
              break;
            sum = sum + atoi(a);
        }
        printf("%d",sum);
    }
}