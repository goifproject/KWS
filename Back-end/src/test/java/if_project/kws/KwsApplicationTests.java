package if_project.kws;

import if_project.kws.Bean.HelloBean;
import if_project.kws.Modules.Location.LocationRepository;
import if_project.kws.Modules.Test.TestService;
import lombok.extern.java.Log;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.test.context.junit4.SpringRunner;

@Log
@RunWith(SpringRunner.class)
@SpringBootTest
public class KwsApplicationTests {

    @Autowired
    TestService testService;

    @Autowired
    LocationRepository locationService;

    @Test
    public void contextLoads() {
    }




    @Test
    public void getAllFinderLocation() {

    }


    /**
     * 비밀번호암호화
     */
    @Test
    public void 비밀번호_암호화() {
        BCryptPasswordEncoder bcr = new BCryptPasswordEncoder();
        String result = bcr.encode("1234");
        System.out.println("암호 === " + result);
    }

    @Test
    public void testInsert(){

        HelloBean helloBean = new HelloBean();

        helloBean.setMsg("test");

        testService.save(helloBean);

    }


}
