package org.bbmp.chbms.api;

import com.fasterxml.jackson.databind.ObjectMapper;
import org.bbmp.chbms.model.Hospitals;
import org.bbmp.chbms.services.HospitalService;
import io.swagger.v3.oas.annotations.Parameter;
import io.swagger.v3.oas.annotations.enums.ParameterIn;
import io.swagger.v3.oas.annotations.media.Schema;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

import javax.servlet.http.HttpServletRequest;
import javax.validation.Valid;
import java.util.List;

@javax.annotation.Generated(value = "io.swagger.codegen.v3.generators.java.SpringCodegen", date = "2021-05-10T06:55:16.648Z[GMT]")
@RestController
public class HospitalApiController implements HospitalApi {

    private static final Logger log = LoggerFactory.getLogger(HospitalApiController.class);

    private final ObjectMapper objectMapper;

    private final HttpServletRequest request;

    private final HospitalService hospitalService;

    @org.springframework.beans.factory.annotation.Autowired
    public HospitalApiController(ObjectMapper objectMapper, HttpServletRequest request, HospitalService hospitalService) {
        this.objectMapper = objectMapper;
        this.request = request;
        this.hospitalService = hospitalService;
    }



    public ResponseEntity<Hospitals> hospitalPost(@Parameter(in = ParameterIn.DEFAULT, description = "", schema=@Schema()) @Valid @RequestBody Hospitals body) {
        String accept = request.getHeader("Accept");
        if (accept != null && accept.contains("application/json")) {
            log.info("sending hospital to event hub ");
            Hospitals hospital = hospitalService.pushHospitalToEventHub(body);
            return new ResponseEntity<Hospitals>(hospital, HttpStatus.CREATED);
        }

        return new ResponseEntity<Hospitals>(HttpStatus.NOT_IMPLEMENTED);
    }

    public ResponseEntity<List<Hospitals>> hospitalAllPost(@Parameter(in = ParameterIn.DEFAULT, description = "", schema=@Schema()) @Valid @RequestBody List<Hospitals> body) {
        String accept = request.getHeader("Accept");
        if (accept != null && accept.contains("application/json")) {
            List<Hospitals> hospitals = hospitalService.pushHospitalsToEventHub(body);
            return new ResponseEntity<List<Hospitals>>(hospitals, HttpStatus.CREATED);
        }

        return new ResponseEntity<List<Hospitals>>(HttpStatus.NOT_IMPLEMENTED);
    }

}
