 /**
 * Copyright © 2016 Tim Sayers. All Rights Reserved.
 */ 
 #include "tim.h"

 int
 main (int argc, char **argv)
 {
   int rflag = 0;
   int nflag = 0;
   int about = 0;
   int clearlogs = 0;
   int help = 0;
   int index;
   int c;

   opterr = 0;

   while ((c = getopt (argc, argv, "rnach")) != -1)
     switch (c)
       {
 	case 'r':
         rflag = 1;
	 about = 0;
         break;
        case 'n':
	 nflag = 1;
	 about = 0;
	 break;
        case 'a':
	 about = 1;
	 break;
	case 'c':
	 clearlogs = 1;
	 break;
	case 'h':
	 help = 1;
	 break;
       default:
	about = 1;        
	//abort ();
       }
echo("Utils Binary\nVersion 1.0");
echo("\nCopyright © 2016 Tim Sayers. All Rights Reserved.\n");
if(about == 1){
exec("clear");
echo("Utils Binary\nVersion 1.0");
echo("\nCopyright © 2016 Tim Sayers. All Rights Reserved.\n");
}
if(help == 1){
exec("clear");
echo("Utils Binary\nVersion 1.0");
echo("\nHelp:\n");
echo("\nutils -h Brings up help\n");
echo("\nutils -a Brings up about\n");
echo("\nutils -n Restarts Nginx\n");
echo("\nutils -c Clears logs\n");
}

if(rflag == 1){
exec("clear");
echo("Restarting Server...\n");
exec("reboot");
}
if(nflag == 1){
exec("clear");
echo("Restarting Nginx...");
}
if(clearlogs == 1){
exec("clear");
echo("Clear Logs...");
exec("rm -rf /var/log/*.*");
}
return 0;
 }
