package ATM;

public class ATM_View {
    ATM_Model model = new ATM_Model();
    public void showMenu() {
        System.out.println("============================");
        System.out.println("Welcome to ATM application");
        System.out.println("Select your action: ");
        System.out.println("1-Login");
        System.out.println("2-View Account information");
        System.out.println("3-Withdraw");
        System.out.println("4-Transfer");
    }

    public void showDetail() {
        System.out.println("Customer Name: " + model.getAccount().customerName);
        System.out.println("Amount: " + model.getAccount().amount);
    }
}
