import javax.sql.rowset.spi.SyncResolver;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class JDBC {

    private static final String DRIVER_NAME = "com.mysql.jdbc.Driver";
    public static final String URL="jdbc:mysql://127.0.0.1:3306/javausers?characterEncoding=utf8&useSSL=true";
    public static final String USER_NAME="root";
    public static final String PASSWORD="";

    List<User> users = new ArrayList<User>();
    Connection connection = null;
    ResultSet result = null;
    private ResultSet query(String sql) {
        try {

            Class.forName(DRIVER_NAME);
            connection = DriverManager.getConnection(URL, USER_NAME, PASSWORD);
            PreparedStatement prst = connection.prepareStatement(sql);
            result = prst.executeQuery();

        } catch (Exception e) {
            e.printStackTrace();
        }

        return result;
    }
    private int exec(String sql) {
        int line =0;
        try {
            Class.forName(DRIVER_NAME);
            connection = DriverManager.getConnection(URL, USER_NAME, PASSWORD);
            PreparedStatement prst = connection.prepareStatement(sql);
            line = prst.executeUpdate();
        } catch (Exception e) {
            e.printStackTrace();
        }
        return line;
    }
    //关闭
    private void close(){
        if (connection != null) {
            try {
                connection.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    public void select(String sql) throws SQLException {
       ResultSet res  = query(sql);
       try {
           while (res.next()){
               System.out.println("------------------------------------------------------");
               System.out.println("id   is : "+res.getInt("id"));
               System.out.println("name is : "+res.getString("name"));
               System.out.println("sex  is : "+((res.getInt("sex"))==1?"男":"女"));
               System.out.println("tel  is : "+res.getLong("tel"));
               System.out.println("age  is : "+res.getInt("age"));
           }
       }finally {
           close();
       }
    }
    public  boolean  insert(User user) throws SQLException {
        try {

            String name = user.getName();
            Integer age = user.getAge();
            String tel = user.getTel();
            Integer sex  = user.getSex();
            String sql = "INSERT INTO users(name,tel,age,sex) values ("+"\""+name+"\""+","+"\""+tel+"\""+","+"\""+age+"\""+","+"\""+sex+"\""+")";
            int line  = exec(sql);
            if (line==1){
                return true;
            }
        }finally {
            close();
        }
        return false;
    }
    public boolean delete(int id){
        try {
            String sql = "delete from users where id="+"\""+id+"\"";
            int line  = exec(sql);
            if (line==1){
                return true;
            }
        } finally {
            close();
        }
        return false;
    }

    public boolean update(int id,String two,String three){
        try {
            String sql ="";
                sql = "update users set "+three+" = " +"\""+two+"\""+"where id = " +"\""+id+"\"";
            int line  = exec(sql);
            if (line==1){
                return true;
            }
        } finally {
            close();
        }
        return false;
    }
}
