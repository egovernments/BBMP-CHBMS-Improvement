package org.bbmp.chbms.service.mapper;


import org.bbmp.chbms.domain.*;
import org.bbmp.chbms.service.dto.HospitalDTO;

import org.mapstruct.*;

/**
 * Mapper for the entity {@link Hospital} and its DTO {@link HospitalDTO}.
 */
@Mapper(componentModel = "spring", uses = {})
public interface HospitalMapper extends EntityMapper<HospitalDTO, Hospital> {


    @Mapping(target = "ids", ignore = true)
    @Mapping(target = "removeId", ignore = true)
    Hospital toEntity(HospitalDTO hospitalDTO);

    default Hospital fromId(Long id) {
        if (id == null) {
            return null;
        }
        Hospital hospital = new Hospital();
        hospital.setId(id);
        return hospital;
    }
}
