#include <stdio.h>

int main() {
	//code

	int t,n,gt,st,k,i,gc=0,sc=0;
	//printf("enter the t\n");
	scanf("%d",&t);
	while(t--)
	{
	//	printf("enter 4 values\n");
	    scanf("%d %d %d %d",&n,&k,&gt,&st);
	    int a[n];
	    for(i=0;i<n;i++)
	    scanf("%d",&a[i]);
	    //linear search
	    for(i=0;i<n;i++)
	    {
	        gc+=gt;
	        if(i==k)
	        {
	            break;
	        }
	    }
	    
	    //binary search
	    int m,l,r;
	    l=0;
	    r=n-1;
	    while(l<r)
	    {
	        m=(l+r)/2;
	        sc+=st;
	   	 	if(m==k)
	    	{
	        	break;
	       
	    	}
	    	else if(k<m)
	    	{	
	        	r=m-1;
	    	}
	    	else
	    	{
	        	l=m+1;
	    	}
	    }
	    
	    if(gc>sc)
	    	printf("2\n");
	    else if(gc<sc)
	    	printf("1\n");
	    else
	    	printf("0\n");
	    
	}
}
