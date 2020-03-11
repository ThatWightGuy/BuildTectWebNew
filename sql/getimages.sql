select Job.jobName as "Job Name", Images.fileLocation as "File"
from Job
join Images on Job.jobID = Images.jobID;