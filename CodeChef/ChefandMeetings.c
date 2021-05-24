#include<stdio.h>
#include<stdlib.h>

int main()
{
    int t;
    scanf("%d",&t);
    while(t--){
        char p[10];
        scanf("%s",p);
        char temp[] = {p[0],p[1],p[3],p[4]};
        int ptime = atoi(temp);
        printf("%d",ptime);
        // printf("%c",p[6]);
    }
}