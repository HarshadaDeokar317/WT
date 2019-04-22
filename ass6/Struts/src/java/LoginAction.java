
import java.sql.*;
import java.util.*;
import java.io.*;


/** Creates a new instance of loginAction */
import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import java.io.IOException;
import java.util.ArrayList;

//import com.thoughtworks.xstream.XStream;
import java.io.FileOutputStream;
import java.io.ObjectOutputStream;
import java.io.OutputStreamWriter;

import org.apache.struts.action.Action;
import org.apache.struts.action.ActionForm;
import org.apache.struts.action.ActionForward;
import org.apache.struts.action.ActionMapping;
import org.apache.struts.action.ActionErrors;


public class LoginAction extends Action{
    
    /** Creates a new instance of DeleteEmployeeAction */
    
    public ActionForward execute(ActionMapping mapping,ActionForm form,HttpServletRequest request,HttpServletResponse response) throws IOException,ServletException {
        String target=new String("success");
        
        
        if(isCancelled(request)) {
            return (mapping.findForward("success"));
            
        }
        try {
            
            LoginForm loginFormObj = (LoginForm) form;
            String username=loginFormObj.getUsername();
            String password=loginFormObj.getPassword();
            
           if(username.equals("Admin")&& password.equals("Admin"))
           {
               target="success";   
           }else
           {
               target="error";
           }
        }catch(Exception e) {
            System.out.println("LoginAction Error: "+ e);
            target = "error";
        }
        
        return (mapping.findForward(target));
    }
}