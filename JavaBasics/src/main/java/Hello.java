import javax.naming.Name;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class Hello {
    static int id = 0;
    public static void main(String[] args) throws SQLException {
        List<User> users = new ArrayList<User>();
        Scanner sc = new Scanner(System.in);
        JDBC jdbc = new JDBC();
        User  user = new User();
        String name,tel,sex;
        int age;
        boolean bool;
        while (true){
            System.out.println("------------欢迎进入用户管理------------");
            System.out.println("--------    1.添加临时用户    -----------");
            System.out.println("--------    2.删除临时用户    -----------");
            System.out.println("--------    3.修改临时用户    -----------");
            System.out.println("--------    4.查找临时用户    -----------");
            System.out.println("--------    5.查寻库内用户  -----------");
            System.out.println("--------    6.添加用户到库  -----------");
            System.out.println("--------    7.更改库内用户  -----------");
            System.out.println("--------    8.删除库内用户  -----------");
            System.out.println("--------    9.退出软件      -----------");
            System.out.println("--------    请输入你的选择  -----------");
            int num = sc.nextInt();
            switch (num){
                case 1:
                    user.setId(id);
                    System.out.println("-------- 请输入你的名字 -----------\n");
                    name = sc.next();
                    user.setName(name);
                    System.out.println("-------- 请输入手机号码 -----------\n");
                    tel = sc.next();
                    user.setTel(tel);
                    System.out.println("-------- 请输入你的年龄 -----------\n");
                    age = sc.nextInt();
                    user.setAge(age);
                    System.out.println("-------- 请输入你的性别 -----------\n");
                    sex = sc.next();
                    if (sex.equals("女")){
                      user.setSex(1);
                    }else{
                        user.setSex(2);
                    }
                    users.add(user);
                    id++;
                    System.out.println("-------- 添加成功 -----------");
                    break;
                case 2:
                    System.out.println("-------- 请输入需要删除的id -----------");
                    int Identification = sc.nextInt();
                    List<User> removeList = new ArrayList<User>();
                    for (User per : users) {
                        if (per.getId()==Identification){
                            removeList.add(per);
                        }
                    }

                    if (removeList.size()>0){
                        users.removeAll(removeList);
                        id--;
                    }
                    break;
                case 3:
                    System.out.println("-------- 请输入需要修改的id -----------");
                    int mark = sc.nextInt();
                    for (User per : users) {
                        if (per.getId()==mark){
                            System.out.println("-------- 请输入需要修改的选项 -----------");
                            System.out.println("--------        1.姓名      -----------");
                            System.out.println("--------        2.手机      -----------");
                            System.out.println("--------        3.年龄      -----------");
                            System.out.println("--------        4.性别      -----------");
                            int select = sc.nextInt();
                            switch (select){
                                case 1:
                                    System.out.println("--------        原姓名为"+per.getName()+"      -----------");
                                    System.out.println("--------        将姓名修改为      -----------");
                                    String changeName = sc.next();
                                    per.setName(changeName);
                                    System.out.println("--------        修改成功      -----------");
                                    break;
                                case 2:
                                    System.out.println("--------        原手机为"+per.getTel()+"      -----------");
                                    System.out.println("--------        将手机修改为      -----------");
                                    String changeTel = sc.next();
                                    per.setTel(changeTel);
                                    System.out.println("--------        修改成功      -----------");
                                    break;
                                case 3:
                                    System.out.println("--------        原年龄为"+per.getAge()+"      -----------");
                                    System.out.println("--------        将年龄修改为      -----------");
                                    int changeAge = sc.nextInt();
                                    per.setAge(changeAge);
                                    System.out.println("--------        修改成功      -----------");
                                    break;
                                case 4:
                                    System.out.println("--------        原性别为"+(per.getSex()==1?"女":"男")+"      -----------");
                                    System.out.println("--------        将性别修改为      -----------");
                                    String changeSex = sc.next();
                                    if (changeSex.equals("女")){
                                        per.setSex(1);
                                    }else{
                                        per.setSex(2);
                                    }
                                    System.out.println("--------        修改成功      -----------");
                                    break;
                                default:
                                    System.out.println("--------        输入错误      -----------");
                                    break;
                            }
                        }
                    }
                    break;
                case 4:
                    for (User per : users) {
                        System.out.println("id   is : "+per.getId());
                        System.out.println("name is : "+per.getName());
                        System.out.println("tel  is : "+per.getTel());
                        System.out.println("age  is : "+per.getAge());
                        System.out.println("sex  is : "+(per.getSex()==1?"女":"男"));
                    }
                    break;
                case 9:
                    System.exit(1);
                    break;
                case 5:
                    jdbc.select("select * from users");
                    break;
                case 6:
                    System.out.println("-------- 请输入你的名字 -----------\n");
                    name = sc.next();
                    user.setName(name);
                    System.out.println("-------- 请输入手机号码 -----------\n");
                    tel = sc.next();
                    user.setTel(tel);
                    System.out.println("-------- 请输入你的年龄 -----------\n");
                    age = sc.nextInt();
                    user.setAge(age);
                    System.out.println("-------- 请输入你的性别 -----------\n");
                    sex = sc.next();
                    if (sex.equals("女")){
                        user.setSex(1);
                    }else{
                        user.setSex(2);
                    }
                    bool = jdbc.insert(user);
                    if (bool){
                        System.out.println("-------- 添加成功 -----------\n");
                    }else{
                        System.out.println("-------- 添加失败 -----------\n");
                    }
                    break;
                case 7:
                    System.out.println("-------- 请输入要修改的人的id -----------\n");
                    id = sc.nextInt();
                    System.out.println("-------- 请输入需要修改的选项 -----------");
                    System.out.println("--------        1.姓名      -----------");
                    System.out.println("--------        2.手机      -----------");
                    System.out.println("--------        3.年龄      -----------");
                    System.out.println("--------        4.性别      -----------");
                    int select = sc.nextInt();
                    switch (select){
                        case 1:

                            System.out.println("--------        将姓名修改为      -----------");
                            String changeName = sc.next();
                            bool = jdbc.update(id,changeName,"name");

                            if (bool){
                                System.out.println("--------        修改成功      -----------");
                            }else {
                                System.out.println("--------        修改失败      -----------");
                            }

                            break;
                        case 2:
                            System.out.println("--------        将手机修改为      -----------");
                            String changeTel = sc.next();
                            bool = jdbc.update(id,changeTel,"tel");
                            if (bool){
                                System.out.println("--------        修改成功      -----------");
                            }else {
                                System.out.println("--------        修改失败      -----------");
                            }
                            break;
                        case 3:
                            System.out.println("--------        将年龄修改为      -----------");
                            String changeAge = sc.next();
                            bool = jdbc.update(id,changeAge,"age");
                            if (bool){
                                System.out.println("--------        修改成功      -----------");
                            }else {
                                System.out.println("--------        修改失败      -----------");
                            }
                            break;
                        case 4:
                            System.out.println("--------        将性别修改为      -----------");
                            String changeSex = sc.next();
                            if (changeSex.equals("女")){
                                bool = jdbc.update(id,"2","sex");
                            }else{
                                bool = jdbc.update(id,"1","sex");
                            }
                            System.out.println("--------        修改成功      -----------");
                            break;
                        default:
                            System.out.println("--------        输入错误      -----------");
                            break;
                    }
                    break;
                case 8:
                    System.out.println("-------- 请输入需要删除的id -----------");
                    id = sc.nextInt();
                    bool = jdbc.delete(id);
                    if (bool){
                        System.out.println("-------- 删除成功 -----------\n");
                    }else{
                        System.out.println("-------- 删除失败 -----------\n");
                    }
                    break;
                default:
                    System.out.println("--------        输入错误      -----------");
                    break;
            }
        }
    }
}