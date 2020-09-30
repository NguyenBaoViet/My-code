package ATM;

public class ATM_Model {
    public static Account getAccount() {
        Account acc = new Account();
        acc.setAccountNo(1);
        acc.setCustomerName("Viet");
        acc.setPassword("123456");
        acc.setAmount(1000);
        return acc;
    }

}
