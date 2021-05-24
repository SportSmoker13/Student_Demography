#include<stdio.h>

int main()
{
	int t;
	scanf("%d",&t);
	while(t--)
	{
		int n,k,i,ct=1;
		scanf("%d%d",&n,&k);
		int arr[n];
		for(i=0;i<n;i++)
			scanf("%d",&arr[i]);
		for(i=0;i<n-1;i++)
		{
			if(arr[i]<k){
				ct++;
				break;
			}
			else{
				arr[i+1] = arr[i+1] + arr[i] - k;
				ct++;
			}
		}
		// printf("%d",arr[n-1]);
		if(arr[n-1]>=k)
		{
			printf("-**-*-*");
			while(arr[n-1]>=k)
			{
				arr[n-1] = arr[n-1] - k;
				ct++;
			}
		}
		printf("%d\n",ct);
	}
}