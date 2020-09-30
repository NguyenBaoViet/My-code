import java.util.Scanner;
public class hello {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String name = "";
        int age;
        String sex;
        int PhoneNumber;

        System.out.println("Nhap thong tin cua ban:");
            System.out.print("Name: ");
            name = scan.nextLine();
            System.out.print("Sex: ");
            sex = scan.nextLine();
            System.out.print("Age: ");
            age = scan.nextInt();            
            System.out.print("Phone Number: ");
            PhoneNumber = scan.nextInt();
            System.out.println("==================");

        System.out.println("Name is " + name);
        System.out.println("Age is " + age);
        System.out.println("Sex is " + sex);
        System.out.println("Phone Number is " + PhoneNumber);
    }
}