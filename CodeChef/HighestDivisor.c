        #include<stdio.h>

        int main()
        {
            int i,n;
            scanf("%d",&n);
            for(i=10;i>0;i--){
                if(n%i==0)
                    break;
            }
            printf("%d",i);
        }