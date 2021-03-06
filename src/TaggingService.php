<?php

/* Software License Agreement (BSD License)
 *
 * Copyright (c) 2010-2011, Rustici Software, LLC
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the <organization> nor the
 *       names of its contributors may be used to endorse or promote products
 *       derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL Rustici Software, LLC BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace AsifM42\ScormCloud;

use AsifM42\ScormCloud\ServiceRequest;

/// <summary>
/// Client-side proxy for the "rustici.course.*" Hosted SCORM Engine web
/// service methods.
/// </summary>
class TaggingService
{
    private $_configuration = null;

    public function __construct($configuration)
    {
        $this->_configuration = $configuration;
        //echo $this->_configuration->getAppId();
    }


    /// <summary>
    /// Add a tag to the course.
    /// </summary>
    /// <param name="courseId">Unique Identifier for this course.</param>
    /// <param name="tag">comma-delimited list of tags</param>
    /// <returns>success</returns>
    public function AddCourseTag($courseId, $tag)
    {
        $request = new ServiceRequest($this->_configuration);
        $params = array('courseid' => $courseId,
                        'tag' => $tag);
        $request->setMethodParams($params);
        $response = $request->CallService("rustici.tagging.addCourseTag");

        return $response;
    }

    public function RemoveCourseTag($courseId, $tag)
    {
        $request = new ServiceRequest($this->_configuration);
        $params = array('courseid' => $courseId,
                        'tag' => $tag);
        $request->setMethodParams($params);
        $response = $request->CallService("rustici.tagging.removeCourseTag");

        return $response;
    }

    public function AddLearnerTag($learnerId, $tag)
    {
        $request = new ServiceRequest($this->_configuration);
        $params = array('learnerid' => $learnerId,
                        'tag' => $tag);
        $request->setMethodParams($params);
        $response = $request->CallService("rustici.tagging.addLearnerTag");

        return $response;
    }

    public function RemoveLearnerTag($learnerId, $tag)
    {
        $request = new ServiceRequest($this->_configuration);
        $params = array('learnerid' => $learnerId,
                        'tag' => $tag);
        $request->setMethodParams($params);
        $response = $request->CallService("rustici.tagging.removeLearnerTag");

        return $response;
    }

        public function AddRegistrationTag($regId, $tag)
    {
        $request = new ServiceRequest($this->_configuration);
        $params = array('regid' => $regId,
                        'tag' => $tag);
        $request->setMethodParams($params);
        $response = $request->CallService("rustici.tagging.addRegistrationTag");

        return $response;
    }

    public function RemoveRegistrationTag($regId, $tag)
    {
        $request = new ServiceRequest($this->_configuration);
        $params = array('regid' => $regId,
                        'tag' => $tag);
        $request->setMethodParams($params);
        $response = $request->CallService("rustici.tagging.removeRegistrationTag");

        return $response;
    }
}
