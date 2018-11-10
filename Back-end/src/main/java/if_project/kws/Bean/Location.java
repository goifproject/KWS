package if_project.kws.Bean;

import lombok.Data;
import org.hibernate.annotations.DynamicUpdate;

import javax.persistence.*;
import java.util.List;


@Data
@Entity
@DynamicUpdate
@Table(name = "ks_location")
public class Location {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long lc_seq;

    private String name;

    private String address;

    private String phone;

    private String time;

    private String work;

    private String photo;

    private float latitude;

    private float longutude;

    private String homepage;

    private String location;

    private Long  category_num;

    private String category_name;

    @ManyToMany(cascade = CascadeType.ALL)
    private List<Volunteer> volunteer;



}
