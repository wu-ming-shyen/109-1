#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	
	#1
	
	int* ptr;
	int i = 10856012;
	
	ptr = &i;
	printf("�ܼ�i���ܼƭȬ�:%d,�ܼ�i���O�����m��:%p\n\n\n",*ptr,ptr);
	
	#2
	
	*ptr = 891012;
	printf("�ܼ�i���ܼƭȬ�:%d,�ܼ�i���O�����m��:%p\n\n\n",*ptr,ptr);
	
	#3
	
	int arr[8] = {1,2,3,4,5,6,7,8};
	
	ptr = &arr[0];
	
	for(i = 0;i < 8;i++){
		printf("arr[%d]���O�����}��:%p\n",i,ptr+i);
	}
	
	return 0;
}
