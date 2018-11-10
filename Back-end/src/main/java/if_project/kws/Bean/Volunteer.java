package if_project.kws.Bean;

import lombok.Data;
import lombok.EqualsAndHashCode;
import org.hibernate.annotations.DynamicUpdate;

import javax.persistence.*;

@EqualsAndHashCode(of = "vl_seq")
@Data
@Entity
@DynamicUpdate
@Table(name = "ks_volunteer")
public class Volunteer {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long vl_seq;

    private String  name;

    private String langauge;

    private String chatUrl;
}
