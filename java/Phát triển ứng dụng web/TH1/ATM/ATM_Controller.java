package ATM;
import java.util.Scanner;
public class ATM_Controller {
    public ATM_Model atm = new ATM_Model();
    public ATM_View view = new ATM_View();

    public void showHomepage() {
        view.showMenu();
    }

    public boolean checkLogin(int accNo, String pass){
        // Kiem tra login voi tai khoan nay  
          return accNo == atm.getAccount().accountNo && pass.equals(atm.getAccount().password);
    }
    public boolean Login(){
        // Yeu cau nguoi dung nhap du lieu
        Scanner sc= new Scanner(System.in);
        System.out.print("Enter your account number:");
        // Doc bien kieu Int
        int accNo = sc.nextInt();
        System.out.print("Enter your password:");
        String pass = sc.next();
        //Kiem tra doi chieu tai khoan va mat khau
        return checkLogin(accNo, pass);
    }

}
