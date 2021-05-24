import java.util.*;

public class Main
{
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int i,t;
        t = sc.nextInt();
        for(i=0;i<1;i++)
        {
            int j,k,b;
            int n;
            n = sc.nextInt();
            int [] arr;
            for(j=0;j<n;j++)
            {
                arr[j] = sc.nextInt();
            }
            
            for (j=0;j<n;j++)
        	{
        		for(k=j+1;k<n;k++)
        		{
            		if(arr[j]==arr[k])
            		{
            			for(b=k;b<n;b++)
            			{
            				arr[b]=arr[b+1];
        				}
        				n--;
        				k--;
        			}
        		}
        	}
            for(j=0;j<n;j++)
                System.out.println(arr[j]);
        }
	}
}
