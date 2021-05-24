#include<stdio.h>
int evod(int x){
    if(x%2==0)
        return 1;
    else
        return 0;
}
int main(){
    int t;
    scanf("%d",&t);
    while(t--){
        long a,b,ct=0,x,y;
        scanf("%ld%ld",&a,&b);
        x = a/2;
        y = b/2;
        ct = x*y + (a-x)*(b-y);
        printf("%ld",ct);
    }
}