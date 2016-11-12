 #include <tim.h>

 int
 main (int argc, char **argv)
 {
   int rflag = 0;
   int nflag = 0;
   int index;
   int c;

   opterr = 0;

   while ((c = getopt (argc, argv, "rn")) != -1)
     switch (c)
       {
 	case 'r':
         rflag = 1;
         break;
        case 'n':
	 nflag = 1;
	 break;
       default:
         abort ();
       }
if(rflag == 1){
printf("Restarting Server...\n");
system("reboot");
}if(nflag == 1){
printf();
return 0;
 }
