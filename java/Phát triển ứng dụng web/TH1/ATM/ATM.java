package ATM;
import java.util.Scanner;
public class ATM {
    public static void main(String[] args) {
        ATM_Controller controller = new ATM_Controller();
        Scanner sc = new Scanner(System.in);

        boolean flag = false;
        String choice = "y";
        while (choice == "y") {   
            controller = new ATM_Controller();       
            controller.showHomepage();
            System.out.println("================================");       
            System.out.print("Chon chuc nang: ");
            int act = sc.nextInt();
            
            switch (act) {
                case 1:
                    if (controller.Login()) {
                        System.out.println("Login success!");
                        flag = true;
                    } else {
                        System.out.println("Login failed!");
                        flag = false;
                    }
                    break;

                case 2:
                    if (flag) {
                        controller.showDetail();
                    } else {
                        System.out.println("Please login!");
                    }
                    
                    break;
                default:
                    break;
            }
            System.out.println("Continue? (Y/N)");
            choice = sc.next();
            System.out.println();
        }
    }
}
