#include<stdio.h>

int main()
{
    int t;
    scanf("%d",&t);
    while(t--)
    {
        int n,k,d,i;
        scanf("%d %d %d",&n,&k,&d);
        int sum=0;
        for(i=0;i<n;i++)
        {
            int temp;
            scanf("%d",&temp);
            sum = sum + temp;
        }
        if(sum<k)
            printf("0");
        else
        {
            int temp = sum/k;
            if(temp>d)
                printf("%d",d);
            else
                printf("%d",temp);
        }
    }
    return 0;
}