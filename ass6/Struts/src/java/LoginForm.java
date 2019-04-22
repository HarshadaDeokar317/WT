
import javax.servlet.http.HttpServletRequest;
import org.apache.struts.action.ActionForm;
import org.apache.struts.action.ActionMapping;
import org.apache.struts.action.ActionErrors;


    
 
public class LoginForm  extends ActionForm{
    
    /** Creates a new instance of loginForm */
  

    protected String username;
    protected String password;
    
    public void setUsername(String username)
    {
        this.username =username;
    }
    public String getUsername()
    {
       return username;
    }
    public void setPassword(String password)
    {
        this.password =password;
    }
    public String getPassword()
    {
       return password;
    }
    
 public void reset(ActionMapping mapping, HttpServletRequest request)
    {
        this.username = "";
        this.password = "";        
    }

 public ActionErrors validate (ActionMapping mapping, HttpServletRequest request)
    {
        ActionErrors errors=new ActionErrors();
        
       /* if((username == null) || (username.length() ==0))
        {
            errors.add("username",new ActionError("errors.username.required"));
        }
        if((password == null) || (password.length() ==0))
        {
            errors.add("password",new ActionError("errors.password.required"));
        }*/
        return errors;
    }
}


