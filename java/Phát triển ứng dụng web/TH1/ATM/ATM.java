package ATM;
import java.util.Scanner;
public class ATM {
    public static void main(String[] args) {
        ATM_Controller controller = new ATM_Controller();
        Scanner sc = new Scanner(System.in);
        
        String choice = "y";
        while (choice = "y"){
            controller.showHomepage();       
            System.out.print("Chon chuc nang: ");
            int act = sc.nextInt();
            
            switch (act) {
                case 1:
                    if (controller.Login()) {
                        System.out.println("Login success!");
                    } else {
                        System.out.println("Login failed!");
                    }
                    break;
            
                default:
                    break;
            }
            sc.close();
        }
        System.out.println("Continue? (Y/N)");
        choice = sc.next();
        System.out.println();
    }
}
