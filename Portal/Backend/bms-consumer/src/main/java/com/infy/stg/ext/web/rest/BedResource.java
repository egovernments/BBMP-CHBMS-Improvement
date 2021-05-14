package com.infy.stg.ext.web.rest;

import com.infy.stg.ext.service.BedService;
import com.infy.stg.web.rest.errors.BadRequestAlertException;
import com.infy.stg.service.dto.BedDTO;

import io.github.jhipster.web.util.HeaderUtil;
import io.github.jhipster.web.util.ResponseUtil;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.net.URI;
import java.net.URISyntaxException;
import java.util.List;
import java.util.Optional;

/**
 * REST controller for managing {@link com.infy.stg.domain.Bed}.
 */

@RestController("BedResource")
@RequestMapping("/api")
public class BedResource extends com.infy.stg.web.rest.BedResource {

    private final Logger log = LoggerFactory.getLogger(BedResource.class);

    private static final String ENTITY_NAME = "bed";

    @Value("${jhipster.clientApp.name}")
    private String applicationName;

    private final BedService bedService;

    public BedResource(BedService bedService) {
        super(bedService);
        this.bedService = bedService;
    }
}
