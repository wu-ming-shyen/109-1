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
	printf("�аݤ@�~��@���h�ֹ�ߤl?(��J�@�~���X�Ӥ�...12)");
	scanf("%ld",&n);
	for(i=1;i<=n;i++) printf("F(%d)=%ld \n",i,F(i));
}
