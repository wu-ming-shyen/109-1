#include <stdio.h>
#include <stdlib.h> 

int main()
{
	int n=0;
	printf("�п�J�n�L�X���h��:");
	scanf("%d", &n);
	
	int i=0,j=0;
	for(i=1;i<7;i++)
	{
		for(j=0;j<7-i;j++)
		{
			printf(" ");
		}
		for(j=1;j<2*i;j++)
		{
			printf("*");
		}
		printf("\n");
	}
	for(i=7;i>0;i--)
	{
		for(j=0;j<7-i;j++)
		{
			printf(" ");
		}
		for(j=1;j<2*i;j++)
		{
			printf("*");
		}
		printf("\n");
	} 
	return 0;
}
