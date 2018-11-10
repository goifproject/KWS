package if_project.kws.Modules.Test;

import if_project.kws.Bean.HelloBean;
import org.springframework.data.repository.CrudRepository;

public interface TestService extends CrudRepository<HelloBean, Long> {
}
