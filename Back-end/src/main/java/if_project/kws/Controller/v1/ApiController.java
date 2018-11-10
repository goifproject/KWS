package if_project.kws.Controller.v1;

import if_project.kws.Bean.Location;
import if_project.kws.Modules.Location.LocationRepository;
import if_project.kws.Modules.Location.LocationService;
import io.swagger.annotations.Api;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import javax.transaction.Transactional;
import java.util.Optional;

@RestController
@RequestMapping("/api/kws/v1/")
@Api(value = "KWS_API", description = "KWS API")
public class ApiController {

    @Autowired
    private LocationRepository locationRepository;

    @Autowired
    private LocationService locationService;

    @GetMapping("/location")
    public Iterable<Location> getAllLocation() {

        Iterable<Location> locations = locationRepository.findAll();
        return locations;
    }

    @GetMapping("/find_location")
    public Optional<Location> getFindLocation(Long lc_seq) {
        Optional<Location> locations = locationRepository.findById(lc_seq);

        return locations;
    }


    @Transactional
    @PostMapping("/insert_location")
    public void Location(@ModelAttribute("location") Location location) {
        locationRepository.save(location);
    }

}
