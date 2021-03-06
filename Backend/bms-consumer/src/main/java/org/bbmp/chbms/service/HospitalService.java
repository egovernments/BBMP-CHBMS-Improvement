package org.bbmp.chbms.service;

import org.bbmp.chbms.service.dto.HospitalDTO;

import java.util.List;
import java.util.Optional;

/**
 * Service Interface for managing {@link org.bbmp.chbms.domain.Hospital}.
 */
public interface HospitalService {

    /**
     * Save a hospital.
     *
     * @param hospitalDTO the entity to save.
     * @return the persisted entity.
     */
    HospitalDTO save(HospitalDTO hospitalDTO);

    /**
     * Get all the hospitals.
     *
     * @return the list of entities.
     */
    List<HospitalDTO> findAll();


    /**
     * Get the "id" hospital.
     *
     * @param id the id of the entity.
     * @return the entity.
     */
    Optional<HospitalDTO> findOne(Long id);

    /**
     * Delete the "id" hospital.
     *
     * @param id the id of the entity.
     */
    void delete(Long id);
}
