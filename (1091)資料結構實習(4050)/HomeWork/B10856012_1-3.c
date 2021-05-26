#include <stdio.h>
#include <stdlib.h> 

int GCD(int a,int b)
{
	if(b) while((a%=b)&&(b%=a));
	return (a+b);
}

int LCM(int a,int b)
{
	return a*b / GCD(a,b);
}

int main()
{
	int x=0,y=0;
	printf("請輸入兩個數");
	scanf("%d %d", &x, &y);
	printf("A=%d B=%d GCD=%d LCM=%d",x,y,GCD(x,y),LCM(x,y));
	return 0;
}
