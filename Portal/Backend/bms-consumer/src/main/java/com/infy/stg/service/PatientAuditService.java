package com.infy.stg.service;

import com.infy.stg.service.dto.PatientAuditDTO;

import java.util.List;
import java.util.Optional;

/**
 * Service Interface for managing {@link com.infy.stg.domain.PatientAudit}.
 */
public interface PatientAuditService {

    /**
     * Save a patientAudit.
     *
     * @param patientAuditDTO the entity to save.
     * @return the persisted entity.
     */
    PatientAuditDTO save(PatientAuditDTO patientAuditDTO);

    /**
     * Get all the patientAudits.
     *
     * @return the list of entities.
     */
    List<PatientAuditDTO> findAll();


    /**
     * Get the "id" patientAudit.
     *
     * @param id the id of the entity.
     * @return the entity.
     */
    Optional<PatientAuditDTO> findOne(Long id);

    /**
     * Delete the "id" patientAudit.
     *
     * @param id the id of the entity.
     */
    void delete(Long id);
}
