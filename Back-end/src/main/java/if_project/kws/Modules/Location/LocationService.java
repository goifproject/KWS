package if_project.kws.Modules.Location;

import if_project.kws.Bean.LocationBean;
import lombok.RequiredArgsConstructor;
import org.apache.ibatis.session.SqlSession;
import org.springframework.stereotype.Component;

import java.util.List;

@Component
@RequiredArgsConstructor
public class LocationService implements LocationDTO {

    private final SqlSession sqlSession;

    @Override
    public List<LocationBean> getAllLocation() {

        return sqlSession.selectList("kws.getAllLocation");
    }
}
