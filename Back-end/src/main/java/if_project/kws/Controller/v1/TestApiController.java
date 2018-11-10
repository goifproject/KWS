package if_project.kws.Controller.v1;

import if_project.kws.Bean.HelloBean;
import if_project.kws.Modules.Test.TestService;
import io.swagger.annotations.Api;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/api/test/v1/")
@Api(value = "KWS_TEST_API", description = "KWS 테스트용 API")
public class TestApiController {

    @Autowired
    private TestService testService;

    @PostMapping("/test")
    public void testInsert(HelloBean helloBean) {
        testService.save(helloBean);
    }

}
