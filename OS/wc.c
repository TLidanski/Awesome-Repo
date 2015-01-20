#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <unistd.h>
#include <errno.h>


int main(int argc, char *argv[]) {
	char buff[200];
	int fd;
	int lines = 0;
	int words = 0;
	int characters = 0;
	int i;
	char c;
	for (i=0;i<argc;i++){
	fd = open("argv[i]", O_RDONLY);
	}
	
	if(fd == -1) {
		perror("open");
		return 1;
	}
	
	int status_read = 1;
	while(status_read > 0) {
		status_read = read(fd, buff, 200);
		if(status_read < 0) {
			perror("read");
			return 1;
		}
		
	for (buff[i] = 0; i < 200; i++)	 {
		characters++;
		if(c == ' ')
            words++;
        if(c == '\n') {
            lines++;
        }
	 
	 }
	 }
	 if(close(fd) == -1) {
		perror("close");
		return 1;
	}
	 return 0;
	 }
