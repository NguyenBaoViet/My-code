package ATM;

public class Account {
    public int accountNo;
    public String password;
    public double amount;
    public String customerName;
    //Ham set de thay doi gia tri cho thuoc tinh
    public void setAccountNo(int accNo){
        this.accountNo =accNo;
    }
    //Ham get de lay gia tri cua thuoc tinh
    public int getAccountNo(){
        return this.accountNo;
    }
    public void setPassword(String pass){
        this.password =pass;
    }
    //Ham get de lay gia tri cua thuoc tinh
    public String getPassword(){
        return this.password;
    }
    public void setAmount(double amount){
        this.amount= amount;
    }
    //Ham get de lay gia tri cua thuoc tinh
    public double getAmount(){
        return this.amount;
    }
    public void setCustomerName(String custName){
        this.customerName= custName;
    }
    //Ham get de lay gia tri cua thuoc tinh
    public String getCustomerName(){
        return this.customerName;
    }
}