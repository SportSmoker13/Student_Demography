#include<stdio.h>
int min(int d1,int d2){
    if(d1<d2)
        return  d1;
    else
        return  d2;
}
int main(){
    unsigned short d1,d2,v1,v2,p;
    scanf("%hu%hu%hu%hu%hu",&d1,&v1,&d2,&v2,&p);
    if(d1<1 || d1>100 || d2<1 || d2>100 || v1<1 || v1>100 || v2<1 || v2>100 || p<1 || p>1000)
        exit(0);
    unsigned short vac=0,i=0;
    unsigned short days = min(d1,d2);
    while(vac<p){
        vac = vac + v1;
        if(days>=d2)
            vac = vac + v2;
        days++;
    }
    days--;
    printf("%hu",days);
}