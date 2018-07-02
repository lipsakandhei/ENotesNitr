import java.io.*;
import java.util.*;
class node{
	String token;
	int code;
	String value;
	node(String tok, int cod, String val){
		token=tok;
		code=cod;
		value=val;	
	}
}
public class dfa{
	static node[] no = new node[12];
	public static void initialize(){
		no[0] = new node("begin",1,null);
		no[1] = new node("end",2,null);
		no[2] = new node("if",3,null);
		no[3] = new node("else",4,null);
		no[4] = new node("then",5,null);
		no[11] = new node("return",6,null);	
		no[6] = new node("!=",8,"NE");
		no[7] = new node(">=",8,"GE");
		no[5] = new node("==",8,"EQ");
		no[8] = new node("<=",8,"LE");
		no[9] = new node("<",8,"GT");
		no[10] = new node(">",8,"LT");
				//make another symbol table for 6,7
	}
	public static int search(String t){
		for(int i=0;i<12;i++){
			if(no[i].token.compareTo(t)==0)
				return i;		
		}
		return -1;
	}
	public static void main(String[] args)throws IOException{
		initialize();
		File f = new File("/home/student/115cs0204/test");
		Scanner s = new Scanner(f);
		while(s.hasNext()){
			String str = s.next();
			int i = search(str);
			String reg = "[a-zA-Z_][a-zA-Z0-9_]*";
			String reg1 = "[+-]?[0-9]+(\\.[0-9]+)?([Ee][+-]?[0-9]+)?";
			if(i>=0)
				System.out.println(no[i].token+"\t"+no[i].code+"\t"+no[i].value+"\n");
			else if(str.matches(reg)){
				System.out.println(str+"\tIdentifier\n");
			}
			else if(str.matches(reg1)){
				System.out.println(str+"\tConstant\n");
			}
			else
				System.out.println(str+"\tInvalid\n");
		}
	}
}



I had opened my account in launchora thinking,I will spend some quality time writing stuffs.But,I never happened to write anything.Just because, I couldn't give it a start .So,what hindered me from writing?It is the insecurity of reading "the first bad draft".

But,then i realized that the inception of everything is with this bad draft only.Interesting it is,that this "bad draft" can be a metaphor to many things in life which we do for the first time(not necessarily for the first time always).The first step to walk is a toddler's bad draft,our handwriting copies when we were kids-bad drafts,first try at riding cycle-a bad draft,first try at writing stories-a real bad draft,like these we have been the creators of numerous bad drafts.In our life time the bad drafts symbolizes the fact that we are trying something new.But,think if we are scared of the output of first bad draft.What if a toddler is scared to take his first step anticipating a bad and painful fall.Yes, it is obvious that he will never learn to walk.But rather a toddler is inherently very excited to take her first step.Even if she trips and falls she continues to walk and even endeavors to run.The more excited a toddler is to walk ,the more quickly she learn to walk on her own.This trick also well applicable in our cases also.The more excited we are about our first drafts the more quickly we will refine the draft to the final output.