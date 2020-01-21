var status = rs.status();

// Need to init
if (status.code == 94) {
    var result = rs.initiate(
        {
            _id: "mongo_rs",
            version: 1,
            members: [
                { _id: 0, host : "mongo_rs_0:27018" },
                { _id: 1, host : "mongo_rs_1:27019" },
                { _id: 2, host : "mongo_rs_2:27020" }
            ]
        }
    );

    printjson(result);

    if (result.ok !== 1) {
        throw new Error("Init not ok");
    }
} else if (status.ok !== 1) {
    printjson(status);
    throw new Error("Status not ok");
}