#include <stdio.h>

long F(long n)
{
	if(n<=2) return 1;
	return F(n-1)+F(n-2);
}

void main()
{
	int i;
	long n;
	printf("請問一年後共有多少對兔子?(輸入一年有幾個月...12)");
	scanf("%ld",&n);
	for(i=1;i<=n;i++) printf("F(%d)=%ld \n",i,F(i));
}
