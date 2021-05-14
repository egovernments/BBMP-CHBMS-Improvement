/**
 * NOTE: This class is auto generated by the stg code generator program (3.0.25).
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */
package com.infy.stg.api;

import com.infy.stg.model.ErrorResponse;
import com.infy.stg.model.Hospitals;
import io.swagger.v3.oas.annotations.Operation;
import io.swagger.v3.oas.annotations.Parameter;
import io.swagger.v3.oas.annotations.enums.ParameterIn;
import io.swagger.v3.oas.annotations.media.Content;
import io.swagger.v3.oas.annotations.media.Schema;
import io.swagger.v3.oas.annotations.responses.ApiResponse;
import io.swagger.v3.oas.annotations.responses.ApiResponses;
import io.swagger.v3.oas.annotations.security.SecurityRequirement;
import org.springframework.http.ResponseEntity;
import org.springframework.validation.annotation.Validated;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import javax.validation.Valid;

@javax.annotation.Generated(value = "io.stg.codegen.v3.generators.java.SpringCodegen", date = "2021-05-11T13:15:22.100Z[GMT]")
@Validated
public interface HospitalApi {

    @Operation(summary = "Add/Update Hospital Details", description = "This api is to add hospital details to the system", security = {
        @SecurityRequirement(name = "implicit", scopes = {
            "write",
"read"        })    }, tags={  })
    @ApiResponses(value = { 
        @ApiResponse(responseCode = "201", description = "Created", content = @Content(schema = @Schema(implementation = Hospitals.class))),
        
        @ApiResponse(responseCode = "400", description = "Bad Request", content = @Content(schema = @Schema(implementation = ErrorResponse.class))),
        
        @ApiResponse(responseCode = "401", description = "Unauthorized", content = @Content(schema = @Schema(implementation = ErrorResponse.class))) })
    @RequestMapping(value = "/hospital",
        produces = { "application/json" }, 
        consumes = { "application/json" }, 
        method = RequestMethod.POST)
    ResponseEntity<Hospitals> hospitalPost(@Parameter(in = ParameterIn.DEFAULT, description = "", schema=@Schema()) @Valid @RequestBody Hospitals body);

}

