function checking()
{
var b1,l,b2,b3,b4,c=0;

/*convert*/
b1=document.signupform.b1.value
l=b1.toLowerCase();
document.signupform.b1.value=l;
/* edconvert*/

/*rettrive*/
b2=document.signupform.b2.value;
b3=document.signupform.b3.value;
b4=document.signupform.b4.value;
/*end rettrive*/
if((b1=="")&&(b2=="")&&(b2=="")&&(b4==""))
{
	document.getElementById('display').innerHTML ="<br><center><font color='red'>Error!!!</font></center>";
}
else if((b1=="")&&(b2!="")&&(b3!="")&&(b4!=""))
{
document.getElementById('d').innerHTML ="<br><center><font color='red'>Enter The Name!!!</font></center>";	
}
else if((b1!="")&&(b2=="")&&(b3!="")&&(b4!=""))
{
document.getElementById('d').innerHTML ="<br><center><font color='red'>Enter The Roll No!!!</font></center>";	
}
else if((b1!="")&&(b2!="")&&(b3=="")&&(b4!=""))
{
document.getElementById('d').innerHTML ="<br><center><font color='red'>Enter The Date Of Birth!!!</font></center>";	
}
else if((b1!="")&&(b2!="")&&(b3!="")&&(b4==""))
{
document.getElementById('d').innerHTML ="<br><center><font color='red'>Enter The Phone Number!!!</font></center>";	
}
else if(b4!="")
{
	while(b4>0)
	{
		b4=Math.floor(b4/10);
		c+=1;
		
	}
	if(c<10)
	{
		document.getElementById('d').innerHTML ="<br><center><font color='red'>Invalid Phone Number!!!</font></center>";
		
	}
}
}
