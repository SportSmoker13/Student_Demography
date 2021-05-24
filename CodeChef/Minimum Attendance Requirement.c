#include<stdio.h>
int main()
{
    int t;
    scanf("%d",&t);
    while(t--)
    {
        int n;
        scanf("%d",&n);
        char b[n];
        scanf("%s",b);
        int ct = 0;
        for(int i=0;i<n;i++)
        {
            if(b[i]=='1')
                ct++;
        }
        int m = 120-n+ct;
        if(m>=90)
        {
            printf("YES");
            printf("\n");
        }
        else
        {
            printf("NO");
            printf("\n");
        }
    }
}