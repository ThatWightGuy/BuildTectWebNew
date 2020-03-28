select Job.jobName as "Job Name", Images.image as "File"
from Job
join Images on Job.jobID = Images.jobID;